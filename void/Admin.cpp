
//数据操作
class DataContrl
{
    public:
    String SearchData(Datas datas,String name);
    String DataToTxt(Data data);
    String DatasToTxt(Datas datas);
    //
    Datas AddDatas(Datas datas);
    Datas DelDatas(Datas datas);
    Datas IntoDatas(Datas datas);
    //
    Datas AddData(Datas datas,Data data);
    Datas DelData(Datas datas,Data data);
    Datas IntoData(Datas datas,Data data);
};