function replaceword(that, word, oword) {
    that.textContent = that.textContent == oword ? word : oword;
}

document.getElementById("upload-switch-button").onclick = function(){
    this.style.backgroundColor ="limegreen";
}



