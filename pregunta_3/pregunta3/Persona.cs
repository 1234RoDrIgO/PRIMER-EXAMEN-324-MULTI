using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace pregunta3
{
    class Persona
    {
        int idUsuario, ci, telefono;
        string tipoUsuario, nombre, paterno, materno, email, contrasena, fNacimiento, fCreacion;

        public int IdUsuario { get => idUsuario; set => idUsuario = value; }
        public int Ci { get => ci; set => ci = value; }
        public int Telefono { get => telefono; set => telefono = value; }
        public string TipoUsuario { get => tipoUsuario; set => tipoUsuario = value; }
        public string Nombre { get => nombre; set => nombre = value; }
        public string Paterno { get => paterno; set => paterno = value; }
        public string Materno { get => materno; set => materno = value; }
        public string Email { get => email; set => email = value; }
        public string Contrasena { get => contrasena; set => contrasena = value; }
        public string FCreacion { get => fCreacion; set => fCreacion = value; }
        public string FNacimiento { get => fNacimiento; set => fNacimiento = value; }
    }
}
