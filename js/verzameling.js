function buy(name){
    console.log(name);
    window.location.href="../pages/buyInformation.php?name=" + encodeURIComponent(name);
}