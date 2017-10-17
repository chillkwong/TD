<template>
	<data-viewer :source = "source" :thead="thead" :filter="filter" :create="create" :title="title">
		<template scope="props">
			<tr @click="$router.push('/adm/inv-diamonds/' + props.item.id)">
				<td>{{props.item.id}}</td>
				<td>{{props.item.price}}</td>
				<td>{{props.item.weight}}</td>
				<td>{{props.item.color}}</td>
				<td>{{props.item.clarity}}</td>
				<td>{{props.item.cut}}</td>
				<td>{{props.item.polish}}</td>
				<td>{{props.item.symmetry}}</td>
				<td>{{props.item.fluroscence}}</td>
				<td>{{props.item.certificate}}</td>
				<td>{{props.item.stock}}</td>
				<td>{{props.item.shape}}</td>
				<td>{{props.item.lab}}</td>
				<td>{{props.item.created_at}}</td>
			</tr>
		</template>
	</data-viewer>

</template>

<script>
	import DataViewer from '../../../components/DataViewer.vue'

	export default {
		name: 'InvDiamondsIndex',
		data(){
			return {
				title: 'Invoice Diamonds',
				source: '/api/invDiamonds',
				create:'/adm/invDiamonds/create',
				thead: [
				{ title: 'ID', key: 'id', sort: true},
				{ title: 'Price', key: 'price', sort: true},
				{ title: 'Weight', key: 'weight', sort: true},
				{ title: 'Color', key: 'color', sort: true},
				{ title: 'Clarity', key: 'clarity', sort: true},
				{ title: 'Cut', key: 'cut', sort: true},
				{ title: 'Polish', key: 'polish', sort: true},
				{ title: 'Symmetry', key: 'symmetry', sort: true},
				{ title: 'Fluroscence', key: 'fluroscence', sort: true},
				{ title: 'Certificate', key: 'certificate', sort: true},
				{ title: 'Stock', key: 'stock', sort: true},
				{ title: 'Shape', key: 'shape', sort: true},
				{ title: 'Lab', key: 'lab', sort: true},
				{ title: 'Created At', key: 'created_at', sort: true}
				],
				filter: [
				'id', 'price', 'weight', 'color', 'clarity', 'fluroscence', 'certificate', 'stock', 'cut', 'polish', 'symmetry', 'shape', 'lab'
				]
			}
		},
		components: {
			DataViewer 
				}
	}
</script>