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

public class reamur extends AppCompatActivity {
    EditText num1;
    TextView celsius,fahn,klv;
    Button hasil;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_reamur);
        num1 =findViewById(R.id.num1);
        celsius =findViewById(R.id.celsius);
        fahn =findViewById(R.id.fahn);
        klv =findViewById(R.id.klv);
        hasil =findViewById(R.id.hasil);
    }

    public void convertTemperature(View view) {
        // Mengambil nilai dari input Celsius
        String celsiusStr = num1.getText().toString();

        // Konversi dari String ke double
        double reamur = Double.parseDouble(celsiusStr);

        // Melakukan perhitungan konversi suhu
        double cellsius =  reamur * 5 / 4;
        double fahneinheit = reamur * 5 / 4 + 273.15;
        double kelvin = reamur * 9 / 4 + 32;

        // Menampilkan hasil konversi
        celsius.setText(String.format("%.2f", cellsius));
        fahn.setText(String.format("%.2f", fahneinheit));
        klv.setText(String.format("%.2f", kelvin));
    }

    public void bck (View v) {
        Intent intent = new Intent(this, MainActivity.class);
        startActivity(intent);
    }
}