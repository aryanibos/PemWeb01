// Implementasikan Aroow Function

// Menangkap semua elemen tag a
document.querySelectorAll("#opts a").forEach((a) =>
    // jika di klick akan menjalankan fungsi computerChoice
    a.addEventListener("click", (element) => {
        computerChoice(element);
    })
);

function computerChoice(element) {
    // tangkap pilihan user
    let pilihanUser = element.target.innerText;

    // menangkap element result dengan query selector untuk menampung
    // nilai hasil dari game
    let pilihanComputer = document.querySelector("#result");

    // membuat pilihan untuk komputer
    let choices = ["Rock", "Paper", "Scissors"];

    // pilihan random untuk komputer
    pilihanComputer.innerHTML =
        choices[Math.round(Math.random() * choices.length)];
    pilihanComputer = pilihanComputer.innerHTML;

    // Kondisi draww
    if (pilihanUser == pilihanComputer) {
        alert("DRAW")
    }

    // Kondisi User Menang
    if (pilihanUser == "Rock" && pilihanComputer == "Scissors") {
        alert("You WIN");
    } else if (pilihanUser == "Paper" && pilihanComputer == "Rock") {
        alert("You WIN");
    } else if (pilihanUser == "Scissors" && pilihanComputer == "Papper") {
        alert("You WIN");
    }

    // Kondisi Komputer Menang
    if (pilihanComputer == "Rock" && pilihanUser == "Scissors") {
        alert("You LOSE");
    } else if (pilihanComputer == "Paper" && pilihanUser == "Rock") {
        alert("You LOSE");
    } else if (pilihanComputer == "Scissors" && pilihanUser == "Papper") {
        alert("You LOSE");
    }

}