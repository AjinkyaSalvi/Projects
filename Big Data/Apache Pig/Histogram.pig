rgb = LOAD '$P' USING PigStorage(',') AS (red:int, green:int, blue:int);
ronly = FOREACH rgb GENERATE 1,red,1;
gonly = FOREACH rgb GENERATE 2,green,1;
bonly = FOREACH rgb GENERATE 3,blue,1;
rgroup = group ronly by ($0,$1);
ggroup = group gonly by ($0,$1);
bgroup = group bonly by ($0,$1);
rfinal = foreach rgroup generate $0,SUM($1.$2);
gfinal = foreach ggroup generate $0,SUM($1.$2);
bfinal = foreach bgroup generate $0,SUM($1.$2);
combined = UNION rfinal,gfinal,bfinal;
STORE combined INTO '$O' USING PigStorage (',');