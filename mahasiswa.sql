CREATE DATABASE fakultas; 

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- insert jurusan 
insert into jurusan (kode, nama) values ("APBL", "Sistem Informasi");
insert into jurusan (kode, nama) values ("PTIF", "Akuntansi");

-- insert mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'72190029', 'Raihana', 'perempuan', 'Jakarta', '2000-03-10', 'Perum Grand Taruma Cluster Senopati No.20');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'72190014', 'Salsabila', 'perempuan', 'Karawang', '2001-10-03', 'Perum Grand Taruma Cluster Palma Kuning No.02');

-- update data mahasiswa
update mahasiswa set alamat = "Perum Grand Taruma Cluster Senopati No.20" where id = 2;

-- delete data mahasiswa 
delete from mahasiswa where id = 2;