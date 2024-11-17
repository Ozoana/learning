package com.example.hitung;

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

public class MainActivity extends AppCompatActivity {

    TextView result;
    EditText num1, num2;
    Button addition;
    Button add01;
    Button add02;
    Button add03;
    Button persen;
    //bisa  pakai double tapi hasil nilai nya akan menjadi komma, menggunakan koma. float membuat hasil bulat, di bulatkan nya
    float number1, number2, getResult;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        result = findViewById(R.id.result);
        num1 = findViewById(R.id.num1);
        num2 = findViewById(R.id.num2);
        addition = findViewById(R.id.add);
        add01 = findViewById(R.id.add01);
        add02 = findViewById(R.id.add02);
        add03 = findViewById(R.id.add03);
        persen = findViewById(R.id.persen);

        addition.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                number1 = Integer.parseInt(num1.getText().toString());
                number2 = Integer.parseInt(num2.getText().toString());
                getResult = number1 + number2;
                result.setText(String.valueOf(getResult));
            }
        });

        add01.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                number1 = Integer.parseInt(num1.getText().toString());
                number2 = Integer.parseInt(num2.getText().toString());
                getResult = number1 - number2;
                result.setText(String.valueOf(getResult));
            }
        });

        add02.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                number1 = Integer.parseInt(num1.getText().toString());
                number2 = Integer.parseInt(num2.getText().toString());
                getResult = number1 * number2;
                result.setText(String.valueOf(getResult));
            }
        });

        add03.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                number1 = Integer.parseInt(num1.getText().toString());
                number2 = Integer.parseInt(num2.getText().toString());
                getResult = number1 / number2;
                result.setText(String.valueOf(getResult));
            }
        });

        persen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                number1 = Integer.parseInt(num1.getText().toString());
                number2 = Integer.parseInt(num2.getText().toString());
                getResult = number1 / number2 * 100 ;
                result.setText(String.valueOf(getResult + "%"));
            }
        });
    }
}