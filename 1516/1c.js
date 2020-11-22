// 1c) Express the regular expressions using Javascript core object RegExp() to validate the following:
// 1ci) Student's name - It is  a string of individual character words seperated by character spaces between them. The character words
// may include hypen ('-') but not any numeric digit. The first and last characters of the string should be an alphabet character
var regexp1ci = new RegExp (/^[A-Za-z]+([\s]?[A-Za-z\-])*[A-Za-z]+/); //(Any alphabet) 1 or more times , (0 or 1 space ,any alphabet or - ) 0 or more times, (Any alphabet) 1 or more times

// 1cii)Matriculation number string of 7 numeric digits. The string is preceded by two or three characters and ends with a single character.
// There should be no white space within the entire sring
var regexp1cii = new RegExp (/^[A-Za-z]{2,3}\d{7}[A-za-z]{1}$/);

//1ciii) Email - usernamepart and a domain name. The two parts are seperated by single character @. Username should begin with character
//and maybe contain . or - . The domain name may have 1 or more address extensions, each seperated by . . Last extension 2-4 characters


var regexp1ciii = new RegExp (/^[\w.-]+@[\w.-]*[.][\w]{2,4}$/);


var regexp1civ = new RegExp (/a/);


var regexp1cv = new RegExp (/a/);