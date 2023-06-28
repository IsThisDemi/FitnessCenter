
//document.onload=function(){
document.getElementById("loginselector").onclick=function(){
    console.log("login");
    document.getElementById("login").classList.remove("hidden");
    document.getElementById("registra").classList.add("hidden");
    document.getElementById("registerelector").classList.remove("selected");
    document.getElementById("loginselector").classList.add("selected");
};
document.getElementById("registerelector").onclick=function(){
    console.log("registra");
    document.getElementById("login").classList.add("hidden");
    document.getElementById("registra").classList.remove("hidden");
    document.getElementById("registerelector").classList.add("selected");
    document.getElementById("loginselector").classList.remove("selected");
};
//};