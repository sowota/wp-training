/* console.log("hello world");
console.log("1 " + "4")


var hp = "10"
var ti = "11"
hp = hp - ti
console.log(hp)

var A = "Hello "
var B = "World!"
console.log(A + B)

*/

// Q1

/*let multTable = [ ];

for(let i = 1; i < 10; i++) {
    for(let j = 1; j < 10; j++) {       
    } 

}
console.log (multTable);

// Q2 

for (let i = 1; i <=100; i++){
    if (i%3 === 0 && i%5 === 0) {
        console.log("FizzBuzz")
    } else if (i%3 === 0) {
        console.log("Fizz")
    } else if (i%5 === 0)  {
        console.log("Buzz")
    }else {
        console.log(i)
    }
}

let i = 1;

while(i <= 100){
    console.log(i)
   
    } if (i%3 === 0 && i%5 === 0 ) {
        console.log("FizzBuzz")
    } if (i%3 === 0) {
        console.log("Fizz")
    } if (i%5 === 0)  {
        console.log("Buzz")
    } i++

    */

    /*
    function clickButton (){
         alert("Hello!");
    }

    function greeting () {
        if 
    }*/
/*
    $(function(){
        $('hello').text('Hello jquery world!');
    }
    */

    jQuery(function($){
        $('.bxslider').bxSlider({
           auto: true,
           slideWidth: 640,
           minSlides: 3
       });
    });


/*
$(document).ready(function(){
    $(".bxslider").bxSlider({
        slideWidth: 800,
        adaptiveHeight: true,
    });  
});
*/

function currentTime() {
    var date = new Date();
    var hour = date.getHours();
    var min = date.getMinutes();
    var se = date.getSeconds();
}

function updateTime(k) {
    if (k < 10) {
      return "0" + k;
    }
    else {
      return k;
    }
  }

document.getElementById("clock").innerHTML = hour + ":" + min + ":" + sec;

function currentTime() {
    var t = setTimeout(function(){ currentTime() }, 1000); 
  }
  
  currentTime();
    








