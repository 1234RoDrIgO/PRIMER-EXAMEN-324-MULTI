using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.ListView;

namespace pregunta3
{
    class Modelo
    {
        public Persona porPersona(string email)
        {
            MySqlDataReader reader;
            MySqlConnection con = Conexion.getConexion();
            con.Open();

            string sql = "select * from persona where email = @email";
            MySqlCommand comando = new MySqlCommand(sql, con);
            comando.Parameters.AddWithValue("@email", email);

            reader = comando.ExecuteReader();

            Persona persona = null;
            while (reader.Read())
            {
                persona = new Persona();
                persona.IdUsuario = int.Parse(reader["idUsuario"].ToString());
                persona.Ci = int.Parse(reader["ci"].ToString());
                persona.Nombre = reader["nombre"].ToString();
                persona.Paterno = reader["paterno"].ToString();
                persona.Materno = reader["materno"].ToString();
                persona.FNacimiento = reader["fnacimiento"].ToString();
                persona.Email = reader["email"].ToString();
                persona.Contrasena = reader["contraseña"].ToString();
                persona.Telefono = int.Parse(reader["telefono"].ToString());
                persona.FCreacion = reader["fCreacion"].ToString();
        
            }
            return persona;
        }

       

    }
}
