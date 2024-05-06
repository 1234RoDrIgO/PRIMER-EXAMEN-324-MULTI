namespace pregunta3
{
    partial class inicio
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            button1 = new Button();
            ds = new DataGridView();
            label1 = new Label();
            nm = new Label();
            groupBox1 = new GroupBox();
            txtIdCuenta = new TextBox();
            txtMonto = new TextBox();
            label5 = new Label();
            txtDepartamento = new TextBox();
            label4 = new Label();
            txtTipoCuenta = new TextBox();
            label3 = new Label();
            btnLimpiar = new Button();
            btnGuardar = new Button();
            txtNroCuenta = new TextBox();
            label2 = new Label();
            btnModificar = new Button();
            btnEliminar = new Button();
            ((System.ComponentModel.ISupportInitialize)ds).BeginInit();
            groupBox1.SuspendLayout();
            SuspendLayout();
            // 
            // button1
            // 
            button1.Font = new Font("Segoe UI", 12F, FontStyle.Bold);
            button1.Location = new Point(745, 12);
            button1.Name = "button1";
            button1.Size = new Size(177, 44);
            button1.TabIndex = 0;
            button1.Text = "CERRAR SESION";
            button1.UseVisualStyleBackColor = true;
            button1.Click += button1_Click;
            // 
            // ds
            // 
            ds.AllowUserToAddRows = false;
            ds.AllowUserToDeleteRows = false;
            ds.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            ds.Location = new Point(12, 118);
            ds.Name = "ds";
            ds.ReadOnly = true;
            ds.Size = new Size(575, 299);
            ds.TabIndex = 1;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 15.75F, FontStyle.Bold);
            label1.Location = new Point(12, 63);
            label1.Name = "label1";
            label1.Size = new Size(112, 30);
            label1.TabIndex = 3;
            label1.Text = "Nombre:  ";
            // 
            // nm
            // 
            nm.AutoSize = true;
            nm.Font = new Font("Segoe UI", 15.75F, FontStyle.Bold);
            nm.Location = new Point(141, 63);
            nm.Name = "nm";
            nm.Size = new Size(19, 30);
            nm.TabIndex = 4;
            nm.Text = " ";
            // 
            // groupBox1
            // 
            groupBox1.Controls.Add(txtIdCuenta);
            groupBox1.Controls.Add(txtMonto);
            groupBox1.Controls.Add(label5);
            groupBox1.Controls.Add(txtDepartamento);
            groupBox1.Controls.Add(label4);
            groupBox1.Controls.Add(txtTipoCuenta);
            groupBox1.Controls.Add(label3);
            groupBox1.Controls.Add(btnLimpiar);
            groupBox1.Controls.Add(btnGuardar);
            groupBox1.Controls.Add(txtNroCuenta);
            groupBox1.Controls.Add(label2);
            groupBox1.Font = new Font("Segoe UI Semibold", 12F, FontStyle.Bold, GraphicsUnit.Point, 0);
            groupBox1.Location = new Point(619, 87);
            groupBox1.Name = "groupBox1";
            groupBox1.Size = new Size(273, 409);
            groupBox1.TabIndex = 5;
            groupBox1.TabStop = false;
            groupBox1.Text = "DATOS DE LA CUENTA";
            // 
            // txtIdCuenta
            // 
            txtIdCuenta.Location = new Point(86, 286);
            txtIdCuenta.Name = "txtIdCuenta";
            txtIdCuenta.Size = new Size(100, 29);
            txtIdCuenta.TabIndex = 10;
            txtIdCuenta.Visible = false;
            // 
            // txtMonto
            // 
            txtMonto.Location = new Point(27, 236);
            txtMonto.Name = "txtMonto";
            txtMonto.Size = new Size(216, 29);
            txtMonto.TabIndex = 9;
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Location = new Point(6, 212);
            label5.Name = "label5";
            label5.Size = new Size(60, 21);
            label5.TabIndex = 8;
            label5.Text = "Monto";
            // 
            // txtDepartamento
            // 
            txtDepartamento.Location = new Point(27, 180);
            txtDepartamento.Name = "txtDepartamento";
            txtDepartamento.Size = new Size(216, 29);
            txtDepartamento.TabIndex = 7;
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Location = new Point(6, 156);
            label4.Name = "label4";
            label4.Size = new Size(116, 21);
            label4.TabIndex = 6;
            label4.Text = "Departamento";
            // 
            // txtTipoCuenta
            // 
            txtTipoCuenta.Location = new Point(27, 117);
            txtTipoCuenta.Name = "txtTipoCuenta";
            txtTipoCuenta.Size = new Size(216, 29);
            txtTipoCuenta.TabIndex = 5;
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(6, 93);
            label3.Name = "label3";
            label3.Size = new Size(125, 21);
            label3.TabIndex = 4;
            label3.Text = "Tipo de Cuenta:";
            // 
            // btnLimpiar
            // 
            btnLimpiar.Location = new Point(141, 346);
            btnLimpiar.Name = "btnLimpiar";
            btnLimpiar.Size = new Size(88, 37);
            btnLimpiar.TabIndex = 3;
            btnLimpiar.Text = "Limpiar";
            btnLimpiar.UseVisualStyleBackColor = true;
            btnLimpiar.Click += btnLimpiar_Click;
            // 
            // btnGuardar
            // 
            btnGuardar.Location = new Point(34, 346);
            btnGuardar.Name = "btnGuardar";
            btnGuardar.Size = new Size(88, 37);
            btnGuardar.TabIndex = 2;
            btnGuardar.Text = "Guardar";
            btnGuardar.UseVisualStyleBackColor = true;
            btnGuardar.Click += btnGuardar_Click;
            // 
            // txtNroCuenta
            // 
            txtNroCuenta.Location = new Point(27, 58);
            txtNroCuenta.Name = "txtNroCuenta";
            txtNroCuenta.Size = new Size(216, 29);
            txtNroCuenta.TabIndex = 1;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(6, 34);
            label2.Name = "label2";
            label2.Size = new Size(124, 21);
            label2.TabIndex = 0;
            label2.Text = "Nro. de Cuenta:";
            // 
            // btnModificar
            // 
            btnModificar.Font = new Font("Segoe UI", 12F, FontStyle.Bold, GraphicsUnit.Point, 0);
            btnModificar.Location = new Point(120, 433);
            btnModificar.Name = "btnModificar";
            btnModificar.Size = new Size(142, 44);
            btnModificar.TabIndex = 6;
            btnModificar.Text = "Modificar";
            btnModificar.UseVisualStyleBackColor = true;
            btnModificar.Click += btnModificar_Click;
            // 
            // btnEliminar
            // 
            btnEliminar.Font = new Font("Segoe UI", 12F, FontStyle.Bold, GraphicsUnit.Point, 0);
            btnEliminar.Location = new Point(320, 433);
            btnEliminar.Name = "btnEliminar";
            btnEliminar.Size = new Size(142, 44);
            btnEliminar.TabIndex = 7;
            btnEliminar.Text = "Eliminar";
            btnEliminar.UseVisualStyleBackColor = true;
            btnEliminar.Click += btnEliminar_Click;
            // 
            // inicio
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(934, 508);
            Controls.Add(btnEliminar);
            Controls.Add(btnModificar);
            Controls.Add(groupBox1);
            Controls.Add(nm);
            Controls.Add(label1);
            Controls.Add(ds);
            Controls.Add(button1);
            Name = "inicio";
            Text = "inicio";
            Load += inicio_Load;
            ((System.ComponentModel.ISupportInitialize)ds).EndInit();
            groupBox1.ResumeLayout(false);
            groupBox1.PerformLayout();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button button1;
        private DataGridView ds;
        private Label label1;
        private Label nm;
        private GroupBox groupBox1;
        private Label label2;
        private TextBox txtTipoCuenta;
        private Label label3;
        private Button btnLimpiar;
        private Button btnGuardar;
        private TextBox txtNroCuenta;
        private TextBox txtMonto;
        private Label label5;
        private TextBox txtDepartamento;
        private Label label4;
        private Button btnModificar;
        private Button btnEliminar;
        private TextBox txtIdCuenta;
    }
}