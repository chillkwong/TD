<template>
	<data-viewer :source = "source" :thead="thead" :filter="filter" :create="create" :name="name">
		<template scope="props">
			<tr @click="$router.push('/adm/customers/' + props.item.id)">
				<td>{{props.item.id}}</td>
				<td>{{props.item.name}}</td>
				<td>{{props.item.phone}}</td>
				<td>{{props.item.email}}</td>
				<td>{{props.item.created_at}}</td>
			</tr>
		</template>
	</data-viewer>

</template>

<script>
	import DataViewer from '../../components/DataViewer.vue'

	export default {
		name: 'CustomerIndex',
		data(){
			return {
				name: 'Customers',
				source: '/api/customers',
				create:'/adm/customers/create',
				thead: [
				{ name: 'ID', key: 'id', sort: true},
				{ name: 'Name', key: 'name', sort: true},
				{ name: 'Phone', key: 'phone', sort: true},
				{ name: 'Email Address', key: 'email', sort: true},
				{ name: 'Created At', key: 'created_at', sort: true}
				],
				filter: [
				'id', 'name', 'email', 'phone'
				]
			}
		},
		components: {
			DataViewer 
				}
	}
</script>