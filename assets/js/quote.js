$(document).ready(function (){
    wordflick()
})

let words = ['|  ', '|  ', 'Web Developer','Mobile Developer'],
part,
a = 0,
offset = 0,
len = words.length,
forwards = true,
skip_count = 0,
skip_delay = 5,
speed = 170;

let wordflick = function(){
setInterval(function(){
    if (forwards) {
      if(offset >= words[a].length){
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
       if(offset == 0){
          forwards = true;
          a++;
          offset = 0;
          if(a >= len){
            a=0;
          } 
       }
    }
    part = words[a].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    console.log("heho")
      $('.web-dev').text(part);
},speed);
};