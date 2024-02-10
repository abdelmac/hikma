import { useEffect, useState } from 'react';
import Home from './App/Pages/Home';
import Services from './App/Shared/Services';
import { NavigationContainer } from '@react-navigation/native';
import HomeNavigation from './App/Navigations/HomeNavigation';

export default function App() {

    <View style={styles.container}>
      <AuthContext.Provider 
      value={{userData,setUserData}}>
      {userData?<Home/>:<Login/>}
      {userData?
      <NavigationContainer>
          <HomeNavigation/>
      </NavigationContainer>
      :<Login/>}
      
      </AuthContext.Provider>
   
      
    </View>
  );
}
  container: {
    flex:1,
    backgroundColor: '#F6F8FC',
  
    
  },
});
