/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import java.awt.Color;
import java.awt.Frame;
import java.awt.Graphics;
import java.awt.Panel;

/**
 *
 * @author Sirajudin
 */
public class AWT1 extends Panel {

    private static final long serialVersionUID = 1L;

    AWT1() {
        setBackground(Color.cyan);
    }

    public void paint(Graphics u) {

        //Rumput
        u.setColor(Color.GREEN);
        u.fillRect(0, 200, 590, 270);

        //Matahari
        u.setColor(Color.yellow);
        u.fillOval(430, 50, 80, 80);

        u.setColor(new Color(245, 135, 14));  //cahaya matahari
        u.drawLine(430, 90, 380, 90);   //garis kiri
        u.drawLine(440, 60, 380, 30);   //kiri atas
        u.drawLine(440, 120, 380, 150);   //kiri bawah
        u.drawLine(560, 90, 510, 90);   //garis kanan
        u.drawLine(560, 30, 500, 60);   //kanan atas
        u.drawLine(560, 150, 500, 120);   //kanan bawah
        u.drawLine(470, 10, 470, 50);   //utara
        u.drawLine(470, 130, 470, 170); //selatan

        //Awan
        u.setColor(Color.white);
        u.fillOval(20, 15, 70, 70);
        u.fillOval(50, 15, 70, 75);
        u.fillOval(100, 15, 70, 70);

        //Rumah
        u.setColor(Color.RED);
        u.fillRect(10, 300, 100, 150);

        //Pintu Rumah
        u.setColor(Color.BLUE);
        u.fillRect(50, 374, 50, 75);

        //Gagang Pintu
        u.setColor(Color.YELLOW);
        u.fillOval(88, 400, 10, 10);

        //Atap Rumah
        u.setColor(Color.ORANGE);
        int x[] = new int[]{10, 60, 110};
        int y[] = new int[]{300, 250, 300};
        u.fillPolygon(x, y, 3);

        //Jalan
        u.setColor(Color.gray);
        int a[] = new int[]{580, 240, 410, 580};
        int b[] = new int[]{200, 460, 460, 320};
        u.fillPolygon(a, b, 4);

        //Garis Jalan 1
        u.setColor(Color.white);
        int c[] = new int[]{530, 560, 570, 540};
        int d[] = new int[]{280, 260, 260, 280};
        u.fillPolygon(c, d, 4);

        //Garis Jalan 2
        int e[] = new int[]{440, 470, 480, 450};
        int f[] = new int[]{360, 340, 340, 360};
        u.fillPolygon(e, f, 4);

        //Garis Jalan 3
        int g[] = new int[]{340, 370, 380, 350};
        int h[] = new int[]{450, 430, 430, 450};
        u.fillPolygon(g, h, 4);

    }

    public static void main(String[] args) {
        Frame f1 = new Frame();
        AWT1 H = new AWT1();
        f1.add(H);
        f1.setSize(600, 500);
        f1.setVisible(true);

    }
}
