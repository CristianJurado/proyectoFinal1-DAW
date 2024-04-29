
/*
 * Editor client script for DB table usuarios
 * Created by http://editor.datatables.net/generator
 */

addEventListener("DOMContentLoaded", function () {
	var editor = new DataTable.Editor( {
		ajax: 'php/table.usuarios.php',
		table: '#usuarios',
		fields: [
			{
				"label": "nombre:",
				"name": "nombre"
			},
			{
				"label": "email:",
				"name": "email"
			},
			{
				"label": "password:",
				"name": "password",
				"type": "password"
			},
			{
				"label": "rol:",
				"name": "rol",
				"def": "usuario"
			}
		]
	} );

	var table = new DataTable('#usuarios', {
		ajax: 'php/table.usuarios.php',
		columns: [
			{
				"data": "nombre"
			},
			{
				"data": "email"
			},
			{
				"data": "password"
			},
			{
				"data": "rol"
			}
		],
		layout: {
			topStart: {
				buttons: [
					{ extend: 'create', editor: editor },
					{ extend: 'edit', editor: editor },
					{ extend: 'remove', editor: editor }
				]
			}
		},
		select: true
	});
});
