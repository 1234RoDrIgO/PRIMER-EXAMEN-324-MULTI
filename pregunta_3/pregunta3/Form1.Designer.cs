namespace pregunta3
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
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
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            label1 = new Label();
            label2 = new Label();
            txtcorreo = new TextBox();
            txtpass = new TextBox();
            label3 = new Label();
            btnEntrar = new Button();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 21.75F, FontStyle.Bold, GraphicsUnit.Point, 0);
            label1.Location = new Point(118, 32);
            label1.Name = "label1";
            label1.Size = new Size(106, 40);
            label1.TabIndex = 0;
            label1.Text = "LOGIN";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Font = new Font("Microsoft Sans Serif", 12F);
            label2.Location = new Point(26, 100);
            label2.Name = "label2";
            label2.Size = new Size(84, 20);
            label2.TabIndex = 1;
            label2.Text = "USUARIO";
            // 
            // txtcorreo
            // 
            txtcorreo.Font = new Font("Microsoft Sans Serif", 12F);
            txtcorreo.Location = new Point(166, 94);
            txtcorreo.Name = "txtcorreo";
            txtcorreo.Size = new Size(164, 26);
            txtcorreo.TabIndex = 2;
            // 
            // txtpass
            // 
            txtpass.Font = new Font("Microsoft Sans Serif", 12F);
            txtpass.Location = new Point(166, 169);
            txtpass.Name = "txtpass";
            txtpass.PasswordChar = '*';
            txtpass.Size = new Size(164, 26);
            txtpass.TabIndex = 3;
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Font = new Font("Microsoft Sans Serif", 12F);
            label3.Location = new Point(26, 175);
            label3.Name = "label3";
            label3.Size = new Size(119, 20);
            label3.TabIndex = 4;
            label3.Text = "CONTRASEÑA";
            // 
            // btnEntrar
            // 
            btnEntrar.Font = new Font("Microsoft Sans Serif", 12F);
            btnEntrar.Location = new Point(101, 245);
            btnEntrar.Name = "btnEntrar";
            btnEntrar.Size = new Size(154, 51);
            btnEntrar.TabIndex = 5;
            btnEntrar.Text = "INICIAR SESION";
            btnEntrar.UseVisualStyleBackColor = true;
            btnEntrar.Click += entrar_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(352, 331);
            Controls.Add(btnEntrar);
            Controls.Add(label3);
            Controls.Add(txtpass);
            Controls.Add(txtcorreo);
            Controls.Add(label2);
            Controls.Add(label1);
            Name = "Form1";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Iniciar Sesion";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Label label2;
        private TextBox txtcorreo;
        private TextBox txtpass;
        private Label label3;
        private Button btnEntrar;
    }
}
