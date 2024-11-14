package com.example.celsius;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class kelvin extends AppCompatActivity {
    EditText num1;
    TextView celsius,fahn,remur;
    Button hasil;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_kelvin);
        num1 =findViewById(R.id.num1);
        celsius =findViewById(R.id.celsius);
        fahn =findViewById(R.id.fahn);
        remur =findViewById(R.id.remur);
        hasil =findViewById(R.id.hasil);
    }


    public void convertTemperature(View view) {
        // Mengambil nilai dari input Celsius
        String celsiusStr = num1.getText().toString();

        // Konversi dari String ke double
        double kelvin = Double.parseDouble(celsiusStr);

        // Melakukan perhitungan konversi suhu
        double cellsius = kelvin - 273.15;
        double fahneinheit = (kelvin - 273.15) * 9 / 5 + 32;
        double reamur = (kelvin - 273.15) * 4 / 5;

        // Menampilkan hasil konversi
        celsius.setText(String.format("%.2f", cellsius));
        fahn.setText(String.format("%.2f", fahneinheit));
        remur.setText(String.format("%.2f", reamur));
    }



    public void bck (View v) {
        Intent intent = new Intent(this, MainActivity.class);
        startActivity(intent);
    }
}