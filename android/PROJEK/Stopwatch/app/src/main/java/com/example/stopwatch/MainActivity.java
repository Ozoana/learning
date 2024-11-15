package com.example.stopwatch;

import android.os.Bundle;
import android.os.Handler;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    TextView textView;
    Button start, pause, reset, lap;
    ListView listView;

    private Handler handler = new Handler();
    private long startTime = 0L;
    private long pauseTime = 0L;  // Menyimpan waktu ketika stopwatch dihentikan
    private boolean isRunning = false;
    private ArrayList<String> lapTimes = new ArrayList<>();
    private ArrayAdapter<String> adapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        textView = findViewById(R.id.textview);
        start = findViewById(R.id.button);
        pause = findViewById(R.id.button2);
        reset = findViewById(R.id.button3);
        lap = findViewById(R.id.button4);
        listView = findViewById(R.id.listvieew1);

        adapter = new ArrayAdapter<>(this, android.R.layout.simple_list_item_1, lapTimes);
        listView.setAdapter(adapter);

        start.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (!isRunning) {
                    startTime = System.currentTimeMillis() - pauseTime;  // Mulai dari waktu terakhir
                    handler.postDelayed(updateTimerThread, 0);
                    isRunning = true;
                }
            }
        });

        pause.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (isRunning) {
                    handler.removeCallbacks(updateTimerThread);
                    pauseTime = System.currentTimeMillis() - startTime;  // Simpan waktu yang telah berlalu
                    isRunning = false;
                    pause.setText("Resume");  // Ubah teks menjadi "Resume"
                } else {
                    startTime = System.currentTimeMillis() - pauseTime;  // Lanjutkan dari waktu terakhir
                    handler.postDelayed(updateTimerThread, 0);
                    isRunning = true;
                    pause.setText("Pause");  // Ubah teks kembali ke "Pause"
                }
            }
        });

        reset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                handler.removeCallbacks(updateTimerThread);
                isRunning = false;
                startTime = 0L;
                pauseTime = 0L;  // Reset pauseTime
                textView.setText("00:00:00");
                lapTimes.clear();
                adapter.notifyDataSetChanged();
                pause.setText("Pause");  // Set teks kembali ke "Pause"
            }
        });

        lap.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (isRunning) {
                    String currentTime = textView.getText().toString();
                    lapTimes.add(currentTime);
                    adapter.notifyDataSetChanged();
                }
            }
        });
    }

    private Runnable updateTimerThread = new Runnable() {
        public void run() {
            long timeInMilliseconds = System.currentTimeMillis() - startTime;
            int seconds = (int) (timeInMilliseconds / 1000);
            int minutes = seconds / 60;
            seconds = seconds % 60;
            int milliseconds = (int) (timeInMilliseconds % 1000) / 10;

            String timeFormatted = String.format("%02d:%02d:%02d", minutes, seconds, milliseconds);
            textView.setText(timeFormatted);

            handler.postDelayed(this, 10);
        }
    };
}
