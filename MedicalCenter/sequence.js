
 function predictWinner(score, n)
 {
     count = new Array(2).fill(0);
  
     for(let i = 0;i < score.length; i++)
     {
          
         // increase count
         index = score.charCodeAt(i) - '0'.charCodeAt(0)
         count[index]++
  
         // check losing condition
         if (count[0] == n && count[1] < n - 1)
         {
             document.write("GEEKS lost"," ")
             return
         }
  
         // check winning condition
         if (count[1] == n && count[0] < n - 1){
             document.write("GEEKS won"," ")
             return
         }
  
         // check tie on n-1 point
         if (count[0] == n - 1 && count[1] == n - 1){
             count[0] = 0
             count[1] = 0
             break
         }
     }
     i += 1   
          
     while(i < score.length)
     {
          
         // increase count
         index = score.charCodeAt(i) - '0'.charCodeAt(0)
         count[index] += 1
  
         // check for 2 point lead
         if (Math.abs(count[0] - count[1]) == 2){
              
             // condition of lost
             if (count[0] > count[1])
                 document.write("GEEKS lost"," ")
  
             // condition of win
             else
                 document.write("GEEKS won"," ");
  
             return
         }
         i++
     }
 }
  
 // Driver Code
  
 let score = "1001010101111011101111"
 let n = 15
 predictWinner(score, n)
  
 // This code is contributed by 
