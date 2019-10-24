for i in *.png ; 
do 
tesseract -l fra $i $i;
cat $i.txt | head -n 1 >>out.csv
  done;
