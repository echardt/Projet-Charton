using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace Logiciel_Charton
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            MySqlConnection Connection = new MySqlConnection("database=charton; server=localhost; user id=root");
            MySqlCommand table = new MySqlCommand("Select * from agence where username = '"+username.Text+"' and password= '"+password.Text+"'");


            try
            {
                Cmd.Open();
                rdv rdv = new rdv();
                rdv.Show();
                this.Hide();
            }
            catch
            {
                MessageBox.Show("pas bon");
            }
        }
    }
}
