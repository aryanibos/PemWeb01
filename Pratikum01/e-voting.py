# Membuat fungsi untuk menampilkan pilihan
def show_options():
    print("Pilih kandidat yang akan Anda pilih:")
    print("1. Kandidat A")
    print("2. Kandidat B")
    print("3. Kandidat C")

# Membuat fungsi untuk memvalidasi input


def validate_input(user_input):
    if user_input == "1" or user_input == "2" or user_input == "3":
        return True
    else:
        return False

# Membuat fungsi untuk menghitung jumlah suara


def count_votes(candidate_votes):
    candidate_A = 0
    candidate_B = 0
    candidate_C = 0
    for vote in candidate_votes:
        if vote == "1":
            candidate_A += 1
        elif vote == "2":
            candidate_B += 1
        elif vote == "3":
            candidate_C += 1
    return [candidate_A, candidate_B, candidate_C]

# Membuat fungsi untuk menampilkan hasil


def show_results(candidate_votes):
    [candidate_A, candidate_B, candidate_C] = count_votes(candidate_votes)
    print("Hasil voting:")
    print("Kandidat A:", candidate_A)
    print("Kandidat B:", candidate_B)
    print("Kandidat C:", candidate_C)


# Membuat variabel untuk menyimpan suara
candidate_votes = []

# Meminta input dari pengguna
while True:
    show_options()
    user_input = input("Masukkan pilihan Anda (1-3): ")
    if validate_input(user_input):
        candidate_votes.append(user_input)
        more_votes = input("Apakah Anda ingin memberikan suara lagi? (y/n) ")
        if more_votes == "n":
            break
    else:
        print("Input tidak valid. Silakan coba lagi.")

# Menampilkan hasil
show_results(candidate_votes)
