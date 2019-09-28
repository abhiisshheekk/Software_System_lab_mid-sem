function search() {
    let word = document.getElementById("search").value;
    let fso = new ActiveXObject("Scripting.FileSystemObject");
    let f = fso.OpenTextFile("file.txt", 1);
    let str;
    while(!f.AtEndOfStream) {
        str = f.ReadLine();
        if (str.includes(word)) {
            document.write(str);
            return;
        }
    }
    window.location = "q1add.html";
}

function add() {
    let word = document.getElementById("word").value;
    let meaning = document.getElementById("mean").value;
    
}