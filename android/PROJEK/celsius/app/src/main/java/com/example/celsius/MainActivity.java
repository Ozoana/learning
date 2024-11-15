package com.example.celsius;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {
    EditText num1;
    TextView fahheit,klv,remur;
    Button hasil;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
       num1 = (EditText) findViewById(R.id.num1);
        fahheit = (TextView) findViewById(R.id.fahheit);
        remur = (TextView) findViewById(R.id.remur);
        hasil = findViewById(R.id.hasil);
        klv = findViewById(R.id.klv);
    }

    public void convertTemperature(View view) {
        // Mengambil nilai dari input Celsius
        String celsiusStr = num1.getText().toString();

        // Konversi dari String ke double
        double celsius = Double.parseDouble(celsiusStr);

        // Melakukan perhitungan konversi suhu
        double fahrenheit = (celsius * 9/5) + 32;
        double kelvin = celsius + 273.15;
        double reamur = celsius * 4/5;

        // Menampilkan hasil konversi
        fahheit.setText(String.format("%.2f", fahrenheit));
        klv.setText(String.format("%.2f", kelvin));
        remur.setText(String.format("%.2f", reamur));
    }

//    inten untuk pindah layout, dari menggunakan onclik
    public void fht (View v) {
        Intent intent = new Intent(this, fahneinheit.class);
        startActivity(intent);
    }

    public void klvn (View v) {
        Intent intent = new Intent(this, kelvin.class);
        startActivity(intent);
    }

    public void rmr (View v) {
            Intent intent = new Intent(this, reamur.class);
        startActivity(intent);
    }


}