import { FlatList } from 'react-native';
import { Image } from 'react-native';
import { TurboModuleRegistry } from 'react-native';
import { TouchableOpacity } from 'react-native';
import { useNavigation } from '@react-navigation/native';

export default function VideoCourseList() {

    const [videoList,setVideoList]=useState([]);
    const navigation=useNavigation();

    useEffect(()=>{
        getVideoCourse();
    },[])
        const resp=(await GlobalApi.getVideoCourse()).data;
        const result=resp.data.map((item)=>({
            id:item.id,
            title:item.attributes.title,
            desc:item.attributes.description,
            name:item.attributes.title,
            description:item.attributes.description,
            image:item.attributes.image.data.attributes.url,
            videoTopic:item.attributes.VideoTopic
            Topic:item.attributes.VideoTopic
        }))
        setVideoList(result);
        console.log(result)
        console.log(result) 
    }
    const onPressCourse=(course)=>{
        
        navigation.navigate('course-detail',{courseData:course})
    }
  return (
    <View style={{marginTop:15}}>
     horizontal={true}
     showsHorizontalScrollIndicator={false}
     renderItem={({item})=>(
        <View>
        <TouchableOpacity onPress={()=>onPressCourse(item)}>
            <Image source={{uri:item.image}} 
            style={{width:180,height:100,
            marginRight:10,borderRadius:7}} />
        </View>
            style={{width:210,height:120,
            marginRight:10,borderRadius:7}} /> 
        </TouchableOpacity>
     )}
     />
    </View>
