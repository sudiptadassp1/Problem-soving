function StringPeriods(str) { 
  var root_arr = Array.from(str);
  var sub_arr = new Array();
  var sub_string = "";
  var long_sub_string = "";
  
  root_arr.forEach(e =>{
    sub_arr.push(e);
    sub_string = sub_arr.join("");
    
    if(!((str.split(sub_string).length -1) > 1)){
      sub_arr.length = 0; 
    }else{
      if(sub_string.length > long_sub_string.length){
        long_sub_string = sub_string;
      }
    }
  });
  if(long_sub_string.length > 0){
    return long_sub_string;
  }else{
    return "-1";
  }
}
   
// keep this function call here 
console.log(StringPeriods("abcababcababcab"));