import { FlatList } from 'react-native';
import { Image } from 'react-native';
import Colors from '../Shared/Colors';
import { TouchableOpacity } from 'react-native';
import { useNavigation } from '@react-navigation/native';

export default function CourseList({type}) {
export default function CourseList({type}) { 
    const [courseList,setCourseList]=useState([])
    const navigation=useNavigation();
    useEffect(()=>{
        
        getCourseList();
       
        setCourseList(result); 
    }

    const onPressCourse=(course)=>{
        
        navigation.navigate('course-detail',{courseData:course})
    }
  return (
    <View style={{marginTop:10}}>
    <Text style={{fontSize:20,fontWeight:'bold' ,
      horizontal={true}
      showsHorizontalScrollIndicator={false}
      renderItem={({item})=>(
        <View style={{backgroundColor:Colors.white,marginRight:10,
        borderRadius:10}}>
            <Image source={{uri:item.image}} 
            style={{width:180,height:80, borderRadius:10}} />
        <TouchableOpacity style={{backgroundColor:Colors.white,marginRight:10,
        borderRadius:10}} onPress={()=>onPressCourse(item)}>
            <Image source={{uri:item.image}}  
            style={{width:180,height:100,  
            borderTopLeftRadius:10,borderTopRightRadius:10,
            resizeMode:'cover'}} />
            <View style={{padding:10}}>
            <Text style={{fontWeight:'bold',fontSize:15}}>{item.name}</Text>
            <Text style={{color:Colors.gray,fontWeight:'300'}}>{item.Topic?.length} Lessons</Text>

            </View>
           
        </View> 
        </TouchableOpacity> 
      )}
      />
    </View>
