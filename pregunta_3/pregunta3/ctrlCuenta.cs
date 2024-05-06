using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace pregunta3
{
    class ctrlCuenta
    {
        public List<Cuenta> consulta()
        {
            string email = Form1.email;
            
            MySqlDataReader reader;
            List<Cuenta> lista = new List<Cuenta>();
            string sql = "SELECT c.idCuenta, c.nroCuenta, c.tipoCuenta, c.departamento, c.monto, p.fCreacion FROM PERSONA p JOIN CUENTA c ON p.idUsuario = c.idUsuario WHERE p.email = '" + email + "'";
           
            try
            {
                MySqlConnection con = Conexion.getConexion();
                con.Open();
                MySqlCommand comando = new MySqlCommand(sql, con);

                reader = comando.ExecuteReader();
                while (reader.Read())
                {
                    Cuenta cuenta = new Cuenta();
                    cuenta.IdCuenta = reader.GetInt32("idCuenta");
                    cuenta.TipoCuenta = reader.GetString("tipoCuenta");
                    cuenta.NroCuenta = reader.GetString("nroCuenta");
                    cuenta.Departamento = reader.GetString("departamento");
                    cuenta.Monto = reader.GetInt32("monto");

                    lista.Add(cuenta);
                }
            }catch (MySqlException ex)
            {
                Console.Write(ex.Message.ToString());
            }
            return lista;
        }

        public bool insertar(Cuenta cuenta)
        {
            bool bandera = false;
            string sql = "INSERT INTO cuenta (nroCuenta, tipoCuenta, departamento, monto, idBanco, idUsuario) VALUES ('"+cuenta.NroCuenta+ "', '"+cuenta.TipoCuenta+ "', '"+cuenta.Departamento+ "', '"+cuenta.Monto+ "', '1', '"+Form1.IdUsuario+"')";

            try
            {
                MySqlConnection con = Conexion.getConexion();
                con.Open();
                MySqlCommand comando = new MySqlCommand(sql, con);
                comando.ExecuteNonQuery();
                bandera = true;
                
            }
            catch (MySqlException ex)
            {
                Console.WriteLine(ex.Message.ToString());
                bandera = false;    
            }
            return bandera;
        }

        public bool actualizar(Cuenta cuenta)
        {
            bool bandera = false;
            string sql = "UPDATE cuenta SET nroCuenta ='"+cuenta.NroCuenta+ "', tipoCuenta = '"+cuenta.TipoCuenta+ "', departamento='"+cuenta.Departamento+ "', monto= '"+cuenta.Monto+ "' WHERE idCuenta= '"+cuenta.IdCuenta+ "'";            
            try
            {
                MySqlConnection con = Conexion.getConexion();
                con.Open();
                MySqlCommand comando = new MySqlCommand(sql, con);
                comando.ExecuteNonQuery();
                bandera = true;
            }
            catch (MySqlException ex)
            {
                Console.WriteLine(ex.Message.ToString());
                bandera = false;
            }
            return bandera;
        }
        public bool eliminar(int idCuenta)
        {
            bool bandera = false;
            string sql = "DELETE FROM cuenta WHERE idCuenta= '" + idCuenta + "'";

            try
            {
                MySqlConnection con = Conexion.getConexion();
                con.Open();
                MySqlCommand comando = new MySqlCommand(sql, con);
                comando.ExecuteNonQuery();
                bandera = true;
            }
            catch (MySqlException ex)
            {
                Console.WriteLine(ex.Message.ToString());
                bandera = false;
            }
            return bandera;
        }
    }
}
