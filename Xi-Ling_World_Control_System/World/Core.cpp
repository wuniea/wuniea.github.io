//这里是世界核心，世界管理系统的一部分

class Core
{
    
    public:
        bool Build(Datas data);
        bool Loop();//世界循环
        bool Pause();
        bool Release();
        //
        Admin admin;
        
    private:
        bool Reaction();//用规则修改记录
        //
        bool loop = true;
        bool noloop = false;
        //
        bool loopFlag = loop;
        fstream world;
};

bool Core::Build(Datas datas)
{
    //
    this.world.open("world.txt",ios::in|ios::out);
    //
    if(world.fail())
    {
        return false;
    }
    //
    this.world << admin.DatasToTxt(datas);
    this.world.close();
    return true;
}

bool Core::Pause()
{
    this.loopFlag = false;
    return true;
}

bool Core::Release()
{
   this.world.open("world.txt",ios::out|ios::trunc); 
    return true;
}

bool Core::Reaction()
{
    return true;
}

//工作循环
bool Loop()
{
    while(loopFlag)
    {
        //读取用户操作队列
        //应用用户操作队列
        //根据规则修改记录
    }
}