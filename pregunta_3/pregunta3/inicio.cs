using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics.Contracts;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.ListView;

namespace pregunta3
{
    public partial class inicio : Form
    {

        public inicio()
        {
            InitializeComponent();
            cargarTabla();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
            Form1 login = new Form1();
            login.Visible = true;
            //Cuenta cuenta = new Cuenta();
        }

        private void inicio_Load(object sender, EventArgs e)
        {
            string email = Form1.email;
            string nombreCompleto = "";
            // Creas la conexión a la base de datos
            MySqlConnection con = Conexion.getConexion();
            con.Open();

            // Creas el comando SQL
            MySqlCommand comando = new MySqlCommand();
            comando.Connection = con;

            // Estableces la consulta SQL con el email proporcionado
            comando.CommandText = "SELECT p.nombre, p.paterno, p.materno, c.idCuenta, c.nroCuenta, c.tipoCuenta, c.departamento, c.monto, p.fCreacion " +
                                  "FROM PERSONA p " +
                                  "JOIN CUENTA c ON p.idUsuario = c.idUsuario " +
                                  "WHERE p.email = '" + email + "'";

            // Ejecutas la consulta SQL
            MySqlDataReader reader = comando.ExecuteReader();

            // Verificas si se encontraron resultados
            if (reader.Read())
            {
                // Obtienes los valores de nombre, paterno y materno
                string nombre = reader["nombre"].ToString();
                string paterno = reader["paterno"].ToString();
                string materno = reader["materno"].ToString();

                // Concatenas los valores en una sola variable
                nombreCompleto = nombre + " " + paterno + " " + materno;
            }

            // Cierras la conexión a la base de datos
            con.Close();
            nm.Text = nombreCompleto;

        }


        private void cargarTabla()
        {
            // Crear un BindingSource
            BindingSource bindingSource = new BindingSource();
            ctrlCuenta ctrl = new ctrlCuenta();
            // Asignar el origen de datos del BindingSource como la lista de cuentas
            List<Cuenta> listaCuentas = ctrl.consulta(); // Supongamos que tienes una lista de objetos Cuenta
            bindingSource.DataSource = listaCuentas;

            // Asignar el BindingSource al DataGridView
            ds.DataSource = bindingSource;

        }

        private void btnGuardar_Click(object sender, EventArgs e)
        {
            bool bandera = false;

            Cuenta cuenta = new Cuenta();

            cuenta.NroCuenta = txtNroCuenta.Text;
            cuenta.TipoCuenta = txtTipoCuenta.Text;
            cuenta.Departamento = txtDepartamento.Text;
            cuenta.Monto = int.Parse(txtMonto.Text);

            ctrlCuenta ctrl = new ctrlCuenta();

            if (txtIdCuenta.Text != "")
            {
                cuenta.IdCuenta = int.Parse(txtIdCuenta.Text);
                bandera = ctrl.actualizar(cuenta);
            }
            else
            {
                bandera = ctrl.insertar(cuenta);
            }

            if (bandera)
            {
                MessageBox.Show("Registro Guardado");
                limpiar();
                cargarTabla();
            }
        }

        private void limpiar()
        {
            txtIdCuenta.Text = "";
            txtNroCuenta.Text = "";
            txtTipoCuenta.Text = "";
            txtDepartamento.Text = "";
            txtMonto.Text = "";
        }

        private void btnModificar_Click(object sender, EventArgs e)
        {
            txtIdCuenta.Text = ds.CurrentRow.Cells[0].Value.ToString();
            txtNroCuenta.Text = ds.CurrentRow.Cells[1].Value.ToString();
            txtTipoCuenta.Text = ds.CurrentRow.Cells[2].Value.ToString();
            txtDepartamento.Text = ds.CurrentRow.Cells[3].Value.ToString();
            txtMonto.Text = ds.CurrentRow.Cells[4].Value.ToString();
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {
            bool bandera = false;
            DialogResult resultado = MessageBox.Show("Seguro que quiere eliminar esta Cuenta?", "Salir", MessageBoxButtons.YesNoCancel);

            if (resultado == DialogResult.Yes)
            {
                int id = int.Parse(ds.CurrentRow.Cells[0].Value.ToString());
                ctrlCuenta ctrl = new ctrlCuenta();
                bandera = ctrl.eliminar(id);

                if (bandera)
                {
                    MessageBox.Show("Registro Eliminado");
                    limpiar();
                    cargarTabla();
                }
            }
        }

        private void btnLimpiar_Click(object sender, EventArgs e)
        {
            limpiar();
        }
    }
}

