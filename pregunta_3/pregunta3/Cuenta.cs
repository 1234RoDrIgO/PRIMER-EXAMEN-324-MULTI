using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace pregunta3
{
    class Cuenta
    {
        int idCuenta;
        string nroCuenta;
        string tipoCuenta, departamento;
        int monto;

        public int IdCuenta { get => idCuenta; set => idCuenta = value; }        
        public string NroCuenta { get => nroCuenta; set => nroCuenta = value; }
        public string TipoCuenta { get => tipoCuenta; set => tipoCuenta = value; }
        public string Departamento { get => departamento; set => departamento = value; }
        public int Monto { get => monto; set => monto = value; }
    }
}
