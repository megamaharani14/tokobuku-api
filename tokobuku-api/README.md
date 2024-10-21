Persiapan:
1.Instal laravel:
![Screenshot tokobuku-api](images/install.png)

2.Konfigurasi database dalam file .env:
![Screenshot tokobuku-api](images/konfigurasi.png)

3.Kemudian jalankan perintah php artisan migrate.


Membuat API CRUD 

1.buat migration dan model untuk kategori dan buku:
![Screenshot tokobuku-api](images/modelkategori.png)

Kemudian edit file migration 'create_kategoris_table.php':
![Screenshot tokobuku-api](images/tablekategoris.png)

Selanjutnya edit file table bukus:
![Screenshot tokobuku-api](images/tablebuku.png)
Lalu jalankan perintah php artisan migrate untuk melakukan migrasi

2.Membuat Controller API untuk buku dan kategori:
![Screenshoot tokobuku-api](images/controllerbuku.png)

![Screenshoot tokobuku-api](images/controllerkategori.png)

Lalu isi file KategoriController.php:
![Screenshoot tokobuku-api](images/kategoricontroller.png)

3.Menambahkan Route API:
![Screenshoot tokobuku-api](images/route.png)

4.Testing API dengan Postman
Langkah pertama php artisan serve
Selanjutnya testing endpoint menggunakan postman:
a. Get semua kategori:
![Screenshoot tokobuku-api](images/getkategoris.png)

b. Post untuk menambah kategori baru:
![Screenshoot tokobuku-api](images/postkategori.png)

c. Get semua buku:
![Screenshoot tokobuku-api](images/getbuku.png)

d. Post untuk menambah buku baru:
![Screenshoot tokobuku-api](images/postbuku.png)

E. Get buku berdasarkan id:
![Screenshoot tokobuku-api](images/getid.png)

F. Put Update data buku berdasarkan id 1:
![Screenshoot tokobuku-api](images/putupdate.png)

G. Delete untuk menghapus buku:
![Screenshoot tokobuku-api](images/deletebuku.png)

Tugas:
1.Tambahkan validasi:
nama buku tidak boleh kosong
harga minimal Rp 1.000

2.Buatlah rancangan endpoint baru untuk mencari buku berdasarkan kategori atau judul:

3.Uji api secara publik: