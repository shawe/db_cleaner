<?php
/*
 * This file is part of FacturaScripts
 *
 * @author Avantec Soluciones      contacto@avantec-solucion.es
 * @copyright 2017, Avantec Soluciones. All Rights Reserved.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


require_model('pedido_cliente.php');
require_model('pedido_proveedor.php');
require_model('presupuesto_cliente.php');


class clean_pedido_cliente extends FacturaScripts\model\pedido_cliente
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_all()
	{
		return $this->db->exec("DELETE FROM ".$this->table_name.";");
	}
}

class clean_pedido_proveedor extends FacturaScripts\model\pedido_proveedor
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_all()
	{
		return $this->db->exec("DELETE FROM ".$this->table_name.";");
	}
}

class clean_presupuesto_cliente extends FacturaScripts\model\presupuesto_cliente
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_all()
	{
		return $this->db->exec("DELETE FROM ".$this->table_name.";");
	}
}