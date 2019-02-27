function cssUpdate() {
    let dummyTag = document.getElementById("dummyParagraph")

    dummyTag.style.borderColor = "rgb(" + document.getElementById("bred").value + ", " + document.getElementById("bgreen").value + ", " + document.getElementById("bblue").value + ")"
    dummyTag.style.borderWidth = document.getElementById("bwidth").value + "px"
    dummyTag.style.backgroundColor = "rgb(" + document.getElementById("bgred").value + ", " + document.getElementById("bggreen").value + ", " + document.getElementById("bgblue").value + ")"
}