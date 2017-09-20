<template>
	<data-viewer :source = "source" :thead="thead" :filter="filter" :create="create" :title="title">
		<template scope="props">
			<tr @click="$router.push('/adm/items/' + props.item.id)">
				<td>{{props.item.id}}</td>
				<td>{{props.item.name}}</td>
				<td>{{props.item.description}}</td>
				<td>{{props.item.unit_price}}</td>
				<td>{{props.item.qty}}</td>
				<td>{{props.item.invoice_id}}</td>
				<td>{{props.item.supplier_id}}</td>
				<td>{{props.item.created_at}}</td>
			</tr>
		</template>
	</data-viewer>

</template>

<script>
	import DataViewer from '../../components/DataViewer.vue'

	export default {
		name: 'ItemIndex',
		data(){
			return {
				title: 'Items',
				source: '/api/items',
				create:'/adm/items/create',
				thead: [
				{ title: 'ID', key: 'id', sort: true},
				{ title: 'Name', key: 'name', sort: true},
				{ title: 'Description', key: 'description', sort: true},
				{ title: 'Quantity', key: 'qty', sort: true},
				{ title: 'Unit Price', key: 'unit_price', sort: true},
				{ title: 'Invoice Id', key: 'invoice_id', sort: true},
				{ title: 'Supplier Id', key: 'supplier_id', sort: true},
				{ title: 'Created At', key: 'created_at', sort: true}
				],
				filter: [
				'id', 'qty','name', 'description', 'unit_price','invoice_id','supplier_id'
				]
			}
		},
		components: {
			DataViewer 
				}
	}
</script>