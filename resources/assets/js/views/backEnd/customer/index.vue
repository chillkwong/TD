<template>
	<data-viewer :source = "source" :thead="thead" :filter="filter" :create="create" :title="title">
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
	import DataViewer from '../../../components/DataViewer.vue'

	export default {
		name: 'CustomerIndex',
		data(){
			return {
				title: 'Customers',
				source: '/api/customers',
				create:'/adm/customers/create',
				thead: [
				{ title: 'ID', key: 'id', sort: true},
				{ title: 'Name', key: 'name', sort: true},
				{ title: 'Phone', key: 'phone', sort: true},
				{ title: 'Email Address', key: 'email', sort: true},
				{ title: 'Created At', key: 'created_at', sort: true}
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