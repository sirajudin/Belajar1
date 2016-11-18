/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import java.awt.Color;
/**
 *
 * @author Sirajudin
 */
public class GAMBAR extends javax.swing.JComponent{
    private static final long serialVersionUID = 1L;

	public void paint (java.awt.Graphics g){
        java.awt.Graphics2D g2 = (java.awt.Graphics2D) g;

        g2.setColor(Color.YELLOW);
        g2.fillOval(50, 50, 300, 300);
        g2.setColor(Color.black);
       
        //muka
        g2.drawOval(100,100,300,300);
        g2.setColor(Color.black);
       
        //mata kiri
        int [] x = {90,180,90};
        int [] y = {170,205,240};
        g2.drawPolyline(x, y, 3);

        //mata kanan
        int [] a = {310,220,310};
        int [] b = {170,205,240};
        g2.drawPolyline(a, b, 3);

        //garis lurus diatas mulut
       // g2.drawLine (90, 260,310,260);
       //g2.fillOval(170,230,50, 50);
       //g2.setColor(Color.black); 
       
        //mulut 
        g2.drawArc (90,190,220,140,180,180);
        g2.setColor(Color.black);
        g2.fillArc(90,190 , 220, 140, 180, 180);
        }
        public static void main(String[] args) {
		javax.swing.JFrame frame = new javax.swing.JFrame();
		frame.setSize(450,450);
		frame.setDefaultCloseOperation(javax.swing.JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().add(new GAMBAR());
		frame.setVisible(true);
	}
    
}
