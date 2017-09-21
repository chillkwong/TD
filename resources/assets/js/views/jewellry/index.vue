<template>
	<data-viewer :source = "source" :thead="thead" :filter="filter" :create="create" :title="title">
		<template scope="props">
			<tr @click="$router.push('/adm/jewellries/' + props.item.id)">
				<td>{{props.item.id}}</td>
				<td>{{props.item.stock}}</td>
				<td>{{props.item.name}}</td>
				<td>{{props.item.description}}</td>
				<td>{{props.item.unit_price}}</td>
				<td>{{props.item.created_at}}</td>
			</tr>
		</template>
	</data-viewer>

</template>

<script>
	import DataViewer from '../../components/DataViewer.vue'

	export default {
		name: 'JewellryIndex',
		data(){
			return {
				title: 'Jewellries',
				source: '/api/jewellries',
				create:'/adm/jewellries/create',
				thead: [
				{ title: 'ID', key: 'id', sort: true},
				{ title: 'Stock', key: 'stock', sort: true},
				{ title: 'Name', key: 'name', sort: true},
				{ title: 'Description', key: 'description', sort: true},
				{ title: 'Unit Price', key: 'unit_price', sort: true},
				{ title: 'Created At', key: 'created_at', sort: true}
				],
				filter: [
				'id','stock' ,'name' , 'description','unit_price',
				]
			}
		},
		components: {
			DataViewer 
				}
	}
</script>