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

public class fahneinheit extends AppCompatActivity {

    EditText num1;
    TextView celsius,klv,remur;
    Button hasil;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_fahneinheit);
        num1 =findViewById(R.id.num1);
        celsius =findViewById(R.id.celsius);
        klv =findViewById(R.id.klv);
        remur =findViewById(R.id.remur);
        hasil =findViewById(R.id.hasil);
    }

    public void convertTemperature(View view) {
        // Mengambil nilai dari input Celsius
        String celsiusStr = num1.getText().toString();

        // Konversi dari String ke double
        double fahneinheit = Double.parseDouble(celsiusStr);

        // Melakukan perhitungan konversi suhu
        double cellsius = (fahneinheit - 32) * 5 / 9;
        double kelvin = (fahneinheit - 32) * 5 / 9 + 273.15;
        double reamur = (fahneinheit - 32) * 4 / 9;

        // Menampilkan hasil konversi
        celsius.setText(String.format("%.2f", cellsius));
        klv.setText(String.format("%.2f", kelvin));
        remur.setText(String.format("%.2f", reamur));
    }

    public void bck (View v) {
        Intent intent = new Intent(this, MainActivity.class);
        startActivity(intent);
    }
}