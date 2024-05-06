using MySql.Data.MySqlClient;
using System.Collections.Generic;
using System;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace pregunta3
{
    class Conexion
    {
        public static MySqlConnection getConexion()
        {
            string servidor = "127.0.0.1";
            string puerto = "3307";
            string usuario = "root";
            string password = "";
            string bd = "bdrodrigo";

            string cadenaConexion = "server=" + servidor + "; port=" + puerto + "; user id=" + usuario +
                "; password=" + password + "; database= " + bd;

            MySqlConnection conexion = new MySqlConnection(cadenaConexion);

            try
            {
                return conexion;
            }
            catch (Exception e)
            {

                MessageBox.Show(e.Message+e.StackTrace);
                return null;
            }
        }
    }

}
