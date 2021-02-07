import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.HashSet;
import java.util.Hashtable;
import java.util.Iterator;
import java.util.PriorityQueue;
import java.util.Stack;

public class find_route
{

	static Hashtable<String, ArrayList<String[]>> CityNode = new Hashtable<String, ArrayList<String[]>>();
	static int i = 0;
	static Hashtable<String, Object[]> route = new Hashtable<String, Object[]>();
	static Hashtable<String, Float> hueristic = new Hashtable<String,Float>();

	public static void main(String[] args) throws IOException
	{
		//   ---===###===---   ---===###===---   ---===###===---   Accepting user input for Uninformed search   ---===###===---
		if ((args.length == 3) && ((args[0] != null) || (args[1] != null) || (args[2] != null)))
			find_route.Uninformed(args[0], args[1], args[2]);

		//   ---===###===---   ---===###===---   ---===###===---   Accepting user input for Informed search   ---===###===---
		else if ((args.length == 4) && ((args[0] != null) || (args[1] != null) || (args[2] != null) || (args[3] != null)))
			find_route.Informed(args[0], args[1], args[2], args[3]);
		else
			System.out.println("Please enter valid number of arguments!");
	}

	public static void Uninformed(String input, String source, String destination) throws IOException
	{
		//   ---===###===---   ---===###===---   ---===###===---   Read 'input.txt' File   ---===###===---
		File f = new File(input);
		BufferedReader br = new BufferedReader(new FileReader(f.getPath()));

		String line = br.readLine();
		while (!(line.equals("END OF INPUT")))
		{
			String a = line.split(" ")[0];
			String b = line.split(" ")[1];
			String cost = line.split(" ")[2];

			AddCity(a, b, cost);
			AddCity(b, a, cost);

			line = br.readLine();
		}

		//   ---===###===---   ---===###===---   ---===###===---   Algorithm   ---===###===---
		HashSet<String> visited = new HashSet<String>();
		PriorityQueue<Node> fringe = new PriorityQueue<Node>(1,new Comp());

		fringe.add(new Node(source,null,0)); // Destination: null, Cost: 0
		while (!fringe.isEmpty()) // While fringe is not empty
		{
			Node node = fringe.poll();
			i++;

			//   ---===###===---   ---===###===---   ---===###===---   Logic   ---===###===---
			if ((!route.containsKey(node.city)) || ((Float) route.get(node.city)[1] > node.cost))
			{
				Object[] r = {node.parent != null ? node.parent.city : null, node.cost};
	            route.put(node.city, r);
	        }

			// 'break' if node = destination
			if (node.city.equals(destination))
                break;

			// 'continue' (skip) if node is visited
			if(visited.contains(node.city))
				continue;

			ArrayList<String[]> children = CityNode.get(node.city);
			Iterator<String[]> it = children.iterator();

			while (it.hasNext())
			{
				String[] s = it.next();
				Node n = new Node(s[0], node, node.cost + Float.parseFloat(s[1]));
				fringe.add(n);
			}

			// Add city to 'visited'
			visited.add(node.city);
		}

		//   ---===###===---   ---===###===---   ---===###===---   Printing final route   ---===###===---
		String distance = "infinity";
		Stack<String> FinalRoute = new Stack<String>();

		if (route.containsKey(destination))
		{
			distance = route.get(destination)[1]+" km";
			String p = (String) route.get(destination)[0];

			while (p != null)
			{
				float d = (Float)route.get(destination)[1] - (Float)route.get(p)[1];

				FinalRoute.push(p+" to "+destination+ ", "+d+" km");
				destination = p;

				p = (String)route.get(destination)[0];
			}
		}

		System.out.println("nodes expanded: "+i+"\ndistance: "+distance+"\nroute:");
		if (FinalRoute.isEmpty())
			System.out.println("none");
		else
		{
			while(!FinalRoute.isEmpty())
				System.out.println(FinalRoute.pop());
		}
	}

	public static void AddCity(String a, String b, String cost)
	{
		String[] c = {b, cost};

		if (CityNode.containsKey(a))
			CityNode.get(a).add(c);

		else
		{
			ArrayList<String[]> d = new ArrayList<String[]>();
			d.add(c);
			CityNode.put(a,d);
		}
	}

	public static void Informed(String input, String source, String destination, String h) throws IOException
	{
		//   ---===###===---   ---===###===---   ---===###===---   Read Input File   ---===###===---
		File FH = new File(h);
		BufferedReader brH = new BufferedReader(new FileReader(FH.getPath()));

		String lineH = brH.readLine();
		while (!(lineH.equals("END OF INPUT")))
		{
			hueristic.put(lineH.split(" ")[0].toString(), Float.parseFloat(lineH.split(" ")[1].toString()));
			lineH = brH.readLine();
		}

	//   ---===###===---   ---===###===---   ---===###===---   Read 'input.txt' File   ---===###===---
			File f = new File(input);
			BufferedReader br = new BufferedReader(new FileReader(f.getPath()));

			String line = br.readLine();
			while (!(line.equals("END OF INPUT")))
			{
				String a = line.split(" ")[0];
				String b = line.split(" ")[1];
				String cost = line.split(" ")[2];

				AddCity(a, b, cost);
				AddCity(b, a, cost);

				line = br.readLine();
			}

		//   ---===###===---   ---===###===---   ---===###===---   Algorithm   ---===###===---
		HashSet<String> visited = new HashSet<String>();
		PriorityQueue<Node> fringe = new PriorityQueue<Node>(1,new CompH());

		fringe.add(new Node(source, null, 0, 0));
		while (!fringe.isEmpty())
		{
			Node node = fringe.poll();
			i++;

			//   ---===###===---   ---===###===---   ---===###===---   Logic   ---===###===---
			if ((!route.containsKey(node.city)) || ((Float) route.get(node.city)[1] > node.cost))
			{
				Object[] r = {node.parent != null ? node.parent.city : null, node.cost};
				route.put(node.city, r);
			}

			// 'break' if node = destination
			if (node.city.equals(destination))
				break;

			// 'continue' (skip) if node is visited
			if(visited.contains(node.city))
				continue;

			ArrayList<String[]> children = CityNode.get(node.city);
			Iterator<String[]> ItH = children.iterator();

			while (ItH.hasNext())
			{
				String[] s = ItH.next();
				Node n = new Node(s[0], node, node.cost + Float.parseFloat(s[1]), node.cost + Float.parseFloat(s[1])+hueristic.get(s[0]));
				fringe.add(n);
			}

			// Add city to 'visited'
			visited.add(node.city);
		}

		//   ---===###===---   ---===###===---   ---===###===---   Printing final route   ---===###===---
		String distance = "infinity";
		Stack<String> FinalRoute = new Stack<String>();

		if (route.containsKey(destination))
		{
			distance = route.get(destination)[1]+" km";
			String p = (String) route.get(destination)[0];

			while (p != null)
			{
				float d = (Float)route.get(destination)[1] - (Float)route.get(p)[1];

				FinalRoute.push(p+" to "+destination+ ", "+d+" km");
				destination = p;

				p = (String)route.get(destination)[0];
			}
		}

		System.out.println("nodes expanded: "+i+"\ndistance: "+distance+"\nroute:");
		if (FinalRoute.isEmpty())
			System.out.println("none");
		else
		{
			while(!FinalRoute.isEmpty())
				System.out.println(FinalRoute.pop());
		}
	}
}

class Comp implements Comparator<Node>
{
	public int compare(Node n1,Node n2)
	{
		// Condition sortes in descending order to make process of finding the final route simple
		if (n1.cost>n2.cost) return 1;
        else if (n1.cost<n2.cost) return -1;
        else return 0;
    }
}

class CompH implements Comparator<Node>
{
	public int compare(Node n1, Node n2)
	{
		// Condition sortes in descending order to make process of finding the final route simple
		if (n1.costh>n2.costh)
			return 1;
		else  if (n1.costh<n2.costh)
			return -1;
		return 0;
	}
}

class Node
{
	float cost;
	float costh;
	String city;
	Node parent;

	// For Uninformed search
	Node(String city, Node parent, float cost)
    {
        this.cost = cost;
        this.parent = parent;
        this.city = city;
    }

	// For Informed search
    Node(String city, Node parent, float cost, float costh)
    {
    	this.cost = cost;
        this.parent = parent;
        this.city = city;
        this.costh = costh;
    }
}
