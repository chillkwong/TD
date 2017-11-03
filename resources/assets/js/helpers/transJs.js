export function transJs(data,ori,locale){
				var temp = ''
				 
				temp = ori.filter((da)=> da[data])
				return temp[0][data][locale]
				
			
}