using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Security.Cryptography;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.ListView;
using System.Data;
using MySql.Data.MySqlClient;
using static System.ComponentModel.Design.ObjectSelectorEditor;

namespace pregunta3
{
    class Control
    {
        public string ctrlLogin(string email, string password)
        {
            Modelo modelo = new Modelo();
            string respuesta = "";
            Persona datospersona = null;
            

            if(string.IsNullOrEmpty(email) || string.IsNullOrEmpty(password))
            {
                respuesta = "Debe llenar los campos";
            }
            else
            {
                datospersona = modelo.porPersona(email);
                Form1.IdUsuario = datospersona.IdUsuario;
                if(datospersona == null)
                {
                    respuesta = "El usuario no existe";
                }else
                {
                    
                    if(datospersona.Contrasena != generarSha1(password))
                    {
                        //MessageBox.Show(datospersona.Contrasena+" "+generarSha1(password) + " "+ email);
                        respuesta = "El usuario y/o contraseña no coinciden";
                    }
                    
                }
            }
            return respuesta;
        }

        private string generarSha1(string cadena)
        {
            UTF8Encoding encoding = new UTF8Encoding();
            byte[] data = encoding.GetBytes(cadena);
            byte[] result;

            SHA1CryptoServiceProvider sha = new SHA1CryptoServiceProvider();

            result = sha.ComputeHash(data);

            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < result.Length; i++)
            {
                if(result[i] < 16){
                    sb.Append("0");
                }
                sb.Append(result[i].ToString("x"));
            }

            return sb.ToString();
        }
       
    }
}
