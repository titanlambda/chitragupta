import sys
import boto3


# *******************************
# s3 - boto3 script (python)
def get_s3_details():
    s3 = boto3.client('s3')
    response = s3.list_buckets()
    # Output the bucket names
    print('Existing buckets:')
    buckets = []
    for bucket in response['Buckets']:
        new_bucket = {"name": bucket["Name"], "created": bucket["CreationDate"]}
        buckets.append(new_bucket)
    return buckets


# *******************************
# ec2 - boto3 script (python)
def get_ec2_details():
    ec2 = boto3.resource('ec2')
    ec2_buckets = []

    for instance in ec2.instances.all():
        print(instance.id, instance.state)
        new_ec2_bucket = {"name": instance.id, "state": instance.state}
        ec2_buckets.append(new_ec2_bucket)
    return ec2_buckets


# *******************************
# ec2 - boto3 script (python)
def get_rds_details():
    client = boto3.client('rds')
    response = client.describe_db_instances()
    rds_details = []

    for r in response['DBInstances']:
        db_name = r['DBName']
        db_instance_name = r['DBInstanceIdentifier']
        db_type = r['DBInstanceClass']
        db_storage = r['AllocatedStorage']
        db_engine = r['Engine']
        print(db_instance_name, db_type, db_storage, db_engine)
        new_rds_data = {"db_name": db_name, "db_instance_name": db_instance_name,
                        "db_type": db_type, "db_storage": db_storage,
                        "db_engine": db_engine}
        rds_details.append(new_rds_data)
    return rds_details


def get_assets():
    asset = {}
    asset["s3"] = get_s3_details()
    asset["ec2"] = get_ec2_details()
    asset["rds"] = get_rds_details()
    return asset


if __name__ == "__main__":
    print("S3 Details...\n")
    get_s3_details()

    print("EC2 Details...\n")
    get_ec2_details()

    print("RDS Details...\n")
    get_rds_details()
