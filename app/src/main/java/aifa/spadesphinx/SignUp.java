package aifa.spadesphinx;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class SignUp extends AppCompatActivity {

    Button home, closes;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);

        home = findViewById(R.id.button3);
        home.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent h = new Intent(SignUp.this, Home.class);
                startActivity(h);
                finish();
            }
        });

        closes = findViewById(R.id.button9);
        closes.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent c = new Intent(SignUp.this, Home.class);
                startActivity(c); finish();
            }
        });

    }
}
