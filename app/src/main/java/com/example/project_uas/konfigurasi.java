package com.example.project_uas;

public class konfigurasi {

    //Dibawah ini merupakan Pengalamatan dimana Lokasi Skrip CRUD PHP disimpan
    //Pada tutorial Kali ini, karena kita membuat localhost maka alamatnya tertuju ke IP komputer
    //dimana File PHP tersebut berada
    //PENTING! JANGAN LUPA GANTI IP SESUAI DENGAN IP KOMPUTER DIMANA DATA PHP BERADA
    public static final String URL_ADD="https://fazriuasandroid.000webhostapp.com/androiduas/tambah.php";
    public static final String URL_GET_ALL = "https://fazriuasandroid.000webhostapp.com/androiduas/tampilsemua.php";
    public static final String URL_GET_EMP = "https://fazriuasandroid.000webhostapp.com/androiduas/tampil.php?id=";
    public static final String URL_UPDATE_EMP = "https://fazriuasandroid.000webhostapp.com/androiduas/update.php";
    public static final String URL_DELETE_EMP = "https://fazriuasandroid.000webhostapp.com/androiduas/hapus.php?id=";


    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_EMP_ID = "id";
    public static final String KEY_EMP_NAMA = "name";
    public static final String KEY_EMP_POSISI = "desg"; //desg itu variabel untuk posisi
    public static final String KEY_EMP_KONDISI = "salary"; //salary itu variabel untuk gajih

    //JSON Tags
    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_ID = "id";
    public static final String TAG_NAMA = "name";
    public static final String TAG_POSISI = "desg";
    public static final String TAG_KONDISI = "salary";

    //ID karyawan
    //emp itu singkatan dari Employee
    public static final String EMP_ID = "emp_id";
}
