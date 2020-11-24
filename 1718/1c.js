var regexp1ci = new RegExp(/^[A-Za-z]+[\w\s.-]*[\w]+$/);
//1cii 
if (regexp1ci.test('Testing.1 2-3a')){
    document.write("Valid UID");
} else {
    document.write("Invalid UID");
}
var regexp1cii = /^(?=.*[A-Z])(?=.*[\d])(?=.*[\W]).*$/;
//1civ
if (regexp1ci.test('aB$0cdefgh')){
    document.write("Valid PW");
} else {
    document.write("Invalid PW");
}
