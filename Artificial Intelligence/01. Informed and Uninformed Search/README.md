Informed and Uninformed Search

01.	Program Details:
	Date: 2nd June, 2020
	Language: Java

02.	Problem Statement: Perform Informed and Uninformed (depends on the user) graph search.

03.	Working:

	(i)	Main Function:
		Accepts command line arguments and
		calls respective Uninformed or Informed functions.

	(ii)	Uninformed Function:
		Reads 'input1.txt',
		performs Uninformed search, and
		prints final route.

	(iii)	Informed Function:
		Reads 'input1.txt',
		performs Informed search, and
		prints final route.

	(iv)	AddCity Function: Adds city to 'CityNode'

	(v)	Class Comp and CompH Functions: Compares to sort 'fringe'.

	(vi)	Class Node: Creates node to save details like city, cost, parent.

	06.	Run Code:

	Enter given statements corresponding to the task with required values in command line or terminal.

	(i)	Compile Code: javac find_route.java

	(ii)	Run Code:
		a)	Uninformed Search: java find_route <input_file_name> <source_name> <destination_name>
		b)	Informed Search: java find_route <input_file_name> <source_name> <destination_name> <heuristic_file_name>
