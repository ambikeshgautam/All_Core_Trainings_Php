  function checkFunction(){


            var n = document.getElementById("fname").value;
            var age= document.getElementById("avalue").value;
            var weight= document.getElementById("wvlaue").value;

    if(age>=5&&age<=7){
        if (weight<15) {
          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is lessthan the recommended value 15 at an age of " +age;
        }
        else if(weight>20){

          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is over the recommended value 20 at an age of " +age;
        }
        else
        {
          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is perfect ";
        }
  }
  else if(age>=8&&age<=10){
        if (weight<21) {
            document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is lessthan the recommended value 21 at an age of " +age;
        }
        else if(weight>25){

            document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is Over the recommended value 25 at an age of " +age;
        }
        else{
        
            document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is perfect ";
        }
  }
    else if(age>=11&&age<=15){
        if (weight<26) {
              document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is lessthan the recommended value 26 at an age of " +age;
          }
        else if(weight>30){

          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is over the recommended value 30 at an age of " +age;
          }
        else{
          
          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is perfect ";
        }
  }
  else if(age>=16&&age<=20){
        if (weight<31) {
              document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is lessthan the recommended value 31 at an age of " +age;
          }
        else if(weight>40){

          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is over the recommended value 40 at an age of " +age;
          }
        else{
          
          document.getElementById("demo").innerHTML= "hello " + n+ " !!! Your weight is perfect ";
        }
  }


  else{

    document.getElementById("demo").innerHTML= "hello " + n+ " !!! Enter the Age Between 5 to 20";
  }
}
