<form onSubmit={enviarDatos}>
    <div>
        <div>
            <label>
                Nombre(s)
            </label>

            <input type="text" placeholder="Nombre" />
        </div>
        <div>
            <label>
                Apellido Paterno
            </label>

            <input type="text" placeholder="Apellido Paterno" />
        </div>
        <div>
            <label>
                Apellido Materno
            </label>

            <input type="text" placeholder="Apellido Materno" />
        </div>

        <div>
            <label>
                Cedula de Identidad
            </label>

            <input type="text" placeholder="CI" />
        </div>

        <div>
            <label>
                Correo Electronico
            </label>

            <input type="email" placeholder="Correo" />
        </div>

        <div>
            <label>
                Contraseña
            </label>

            <input type="password" placeholder="Escriba una contraseña" />
        </div>

        <div>
            <button type="submit">
                Registrarse
            </button>
        </div>
    </div>
</form>