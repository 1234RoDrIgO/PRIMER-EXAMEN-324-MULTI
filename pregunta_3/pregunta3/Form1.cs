using MySql.Data.MySqlClient;
using System.Data;

namespace pregunta3
{
    public partial class Form1 : Form
    {
        public static string email;
        private static int idUsuario;

        public static int IdUsuario { get => idUsuario; set => idUsuario = value; }

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void entrar_Click(object sender, EventArgs e)
        {
            email = txtcorreo.Text;
            string contra = txtpass.Text;

            try
            {
                Control control = new Control();
                string respuesta = control.ctrlLogin(email, contra);
                if(respuesta.Length > 0)
                {
                    MessageBox.Show(respuesta, "Aviso", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
                else
                {
                    
                    inicio inicio = new inicio();
                    inicio.Visible = true;
                    this.Visible = false;
                    
                }
            }catch (Exception ex)
            {
                MessageBox.Show("esto es el error" + ex.Message);
            }
        }
    }
}
/*
         string servidor = "127.0.0.1";
            string puerto = "3307";
            string usuario = "root";
            string password = "";
            string bd = "bdrodrigo";

            string cadenaConexion = "server=" + servidor + "; port=" + puerto + "; user id=" + usuario +
                "; password=" + password + "; database= " + bd;

            MySqlConnection conexion = new MySqlConnection(cadenaConexion);
            MySqlDataReader reader = null;
            string data = null;
            try
            {
                string consulta = "SHOW DATABASES";
                MySqlCommand cmd = new MySqlCommand(consulta);
                cmd.Connection = conexion;
                conexion.Open();
                reader = cmd.ExecuteReader();

                while (reader.Read())
                {
                    data += reader.GetString(0) + "\n";

                }
                MessageBox.Show(data);
            }catch(MySqlException ex)
            {
                MessageBox.Show("error: "+ex.Message);

            }
            finally
            {
                conexion.Close();
            }
 */
